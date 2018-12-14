<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
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
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="quest in quests" v-bind:key="quest.id">
                        <th scope="row">{{quest.id}}</th>
                        <td style='font-weight: bold;'>{{quest.name}}</td>
                        <td style='color: #09814A; font-weight: bold;'>{{quest.price ? quest.price + 'M' : 'no price set'}}</td>
                        <td><a @click="addQuest(quest)" href="#" class=" btn btn-outline-dark"> Add</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" v-if="this.order.length">
                    <div class="card-header">
                        <h4 style='font-weight: bold; margin: 0;'>ORDER DETAILS </h4>
                    </div>
                    <div class="card-body">
                 <!-- <p style='margin:0;'> {{ this.order.length ? '': 'Start making an order by selecting quests'}}</p>        -->
                    <ul class="list-group list-group-flush" v-for="quest in order" v-bind:key="quest.id">
                    <li class="list-group-item" style="padding-left: 0;">{{quest.name}} <i @click="removeQuest(quest)"  class="fas fa-trash ml-1"></i> <span style='color: #09814A; font-weight: bold;' class="float-right"> {{quest.price ? quest.price : 0}}M </span> </li>
                    <!-- <a @click="removeQuest(quest)" class="btn btn-outline-dark"> Remove</a> -->
                    
                </ul>
                <div class="total-price mt-3">
                <p class="float-right" style="font-weight: bold; margin: 0;"> 
                    <!-- border: 1px solid black; border-radius: 7px; padding: 5px; -->
                    <span class="mr-1"> {{this.orderPrice ? 'TOTAL PRICE : '  : '' }} </span> 
                    <span style='color: #09814a; padding-right: 1.25rem;'> {{this.orderPrice ? this.orderPrice + 'M' : ''}}</span>
                    </p>
                </div>
                    </div>
                </div>
                <a class="btn btn-outline-dark float-right" v-if="this.order.length" style="display:block; font-weight: bold;">PLACE ORDER</a>
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
            order: [],
            orderPrice: null,
            quest_id: '',
            pagination: {},
            edit: false,
            search: false,
            current_page_url: '/api/quests',
            keywords: null,
            matches: 0,
        }
    },
    mounted() {
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
                this.matches = 0;
                this.quests = res.data;
                vm.makePagination(res.meta, res.links);
            })
            .catch(error => console.log(error));
        },
        addQuest(quest) {
            var a = this.order;
            var b = quest;
            a = JSON.stringify(a);
            b = JSON.stringify(b);
            // do more research into recursively
            var c = a.indexOf(b);
            if(c == -1){
                this.order.push({...quest});
                if(quest.price) {
                    this.orderPrice += quest.price;
                }
            } else {console.log('element already selected');}
        },
        removeQuest(quest) {
            this.order.splice(this.order.indexOf(quest),1);
            if(quest.price) {
                this.orderPrice -= quest.price;
            }
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
            if(this.keywords) {
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
