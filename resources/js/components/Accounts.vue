<template>
  <div class="container " style="padding: 20px;">
    <div class="row">
      <div class="col-lg-5 m-3 account-section" v-for="account in accounts" v-bind:key="account.id">
          <div class="img-section mr-3 float-left">
          <img src="https://cdn.runescape.com/assets/img/external/support/template/icons/category-200977391.svg" alt="">
            <!-- <section class="img-text">
                <span>{{account.cb}}</span>
            </section> -->
          </div>
          <div class="account-info pt-2">
            <span class="" style="display: block; font-weight: bold;">{{account.title}}</span>
            <span  style="display: block; height: 50px;">{{account.information}}</span>
          </div>
          <hr>
          <label class="price">${{account.price}}</label>

          <a class="btn btn-dark float-right ml-2" @click="sendOrderMsg(account)" style='color: white;padding: 4px !important; font-size: 1em !important;'> Order</a>
          <a class="button float-right" @click="getAccount(account.id)" style=' font-weight: 400;padding: 4px !important; font-size: 1em !important;'> Details</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      accounts: []
    };
  },
  created() {
    this.fetchAccounts();
  },
  methods: {
    fetchAccounts() {
      axios.get("/api/accounts").then(res => {
        this.accounts = res.data.data;
      });
    },
    getAccount(id) {
      window.location.href = '/accounts/' + id;
    },
    sendOrderMsg(account) {
      tidioChatApi.messageFromVisitor("Hey, I want to order the following account: " + account.title + ' ' + 'for $' + account.price );
    }
  }
};
</script>
