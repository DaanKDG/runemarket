
<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form class="form-inline mb-3">
                    <input class="form-control mr-sm-2" v-model="keywords" style='width:80%;' type="search" placeholder="Search"
                           aria-label="Search">
                </form>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#"
                        @click="fetchQuests(pagination.prev_page_url)">Previous</a></li>
                        <li class="page-item"><a class="page-link disabled text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
                        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#"
                        @click="fetchQuests(pagination.next_page_url)"
                        >Next</a></li>
                    </ul>
                </nav>
               <p> {{this.matches ? this.matches + ' results found ' : ''}}</p>
                <table class="table" style='width: 80% !important;'>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col" style='color: #09814A;'>Price</th>
            
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="quest in quests" v-bind:key="quest.id">
                        <th scope="row">{{quest.id}}</th>
                        <td style='font-weight: bold;'>{{quest.name}}</td>
                        <td style='color: #09814A; font-weight: bold;'>{{quest.price ? quest.price + 'M' : 'no price set'}}</td>
                        
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <h2 style='font-weight: bold;'> QUESTING ORDER</h2>
            </div>

        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            quests: [],
            quest: {
                id: '',
                name: '',
                price: '',   
            }, 
            quest_id: '',
            pagination: {},
            edit: false,
            search: false,
            current_page_url: '/api/quests',
            keywords: null,
            matches: 0,
        }
    },
    created() {
        this.fetchQuests();
    },
    watch: {
        keywords(after, before) {
            this.fetchSearch();
        }
    },
    methods: {
        fetchQuests(page_url) {
            let vm = this;
            page_url = page_url || this.current_page_url;
            this.current_page_url = page_url;
            fetch(page_url, {
                headers : { 
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(res => {
                this.quests = res.data;
                vm.makePagination(res.meta, res.links);
            })
            .catch(error => console.log(error));
        },
        makePagination(meta,links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
            }
            this.pagination = pagination;
        },
        updateQuest() {
            if(this.edit) {
                fetch( `/api/quests/${this.quest.id}`, {
                    method:'put',
                    body: JSON.stringify(this.quest),
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    }
                })
                .then( res => {
                    if(this.keywords) { this.fetchSearch(); }
                    else { this.fetchQuests(); }
                })
                .catch(error => console.log(error));
            } 
        },
        editQuest(quest) {
            this.edit = true;
            this.quest.id = quest.id;
            this.quest.quest_id = quest.id;
            this.quest.name = quest.name;
            this.quest.price = quest.price;
        },
        fetchSearch() {
            if (this.keywords) {
                axios.get('/api/quests/search', { params: { keywords: this.keywords}}, {
                        headers: {'Content-Type': 'application/json', 'Accept': 'application/json'}
                    })
                    .then(res => {
                        this.quests = res.data.data;
                        this.matches = this.quests.length;
                        console.log(this.matches);
                    })
                    .catch(error => console.log(error));
            } else {
                this.matches = 0;
                this.fetchQuests();
            }
        }
    }
}
</script>
