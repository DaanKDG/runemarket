<template>
  <div class='section'>
      <div class="container p-0 mb-3 mt-3">
          <a href="/accounts">
          <i class="fas fa-arrow-left" style="font-size: 25px; color:#09814A"></i>
          </a>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mt-2 account-section">
          <div class="img-section mr-3 float-left">
            <img
              src="https://cdn.runescape.com/assets/img/external/support/template/icons/category-200977391.svg"
              alt>
          </div>
          <div class="account-info pt-2">
            <span class style="display: block; font-weight: bold;">{{account.title}}</span>
            <span style="display: block; height: 50px;">{{account.information}}</span>
          </div>
          <hr>
          <label class="price">${{account.price}}</label>
          
          <a
            class="btn btn-dark float-right ml-2"
            style="color: white;padding: 4px !important; font-size: 1em !important;"
          >Order</a>
        </div>
      </div>
    </div>
    <div class="container account-details mt-5" style="padding: 30px;">
      <h2 style="display: block;">Skills</h2>
      <hr>
      <div class="row mb-3">
        <div class="col-md-1 p-1" v-for="(skill, key) in skills" v-bind:key="skill.id">
          <div class="skill-section">
            <div class="skill-img text-center">
              <img class="mb-1" v-bind:src="'/images/skills/' + key + '-icon.png'">
              <figcaption>{{skill}}</figcaption>
            </div>
          </div>
        </div>
      </div>
      <div class="info-section mb-3">
        <h2 style="display: block;">Information</h2>
        <hr>
        {{account.information}}
      </div>
      <div class="gallery-section mb-3">
        <h2 style="display: block;">Gallery
          <small style="font-size: 0.5em;">(click for large image)</small>
        </h2>
        <hr>

        <div class="row">
          <div class="col-md-4 mb-2">
            <a href="#" class="pop">
              <img
                v-bind:src='account.skill_image'
                style="min-height: 225px; width: 100%;"
              >
            </a>
          </div>

          <div class="col-md-4 mb-2">
            <a href="#" class="pop">
              <img v-bind:src='account.image_two' style="min-height: 250px; width: 100%;">
            </a>
          </div>
          <div class="col-md-4 mb-2">
            <a href="#" class="pop">
              <img v-bind:src='account.image_three' style="min-height: 250px; width: 100%;">
            </a>
          </div>
        </div>

        <div
          class="modal fade"
          id="imagemodal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content" style>
              <div class="modal-body" style>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <img src class="imagepreview" style="height: 100%; width: 100%;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 style>Billing</h2>
      <hr>
    <div class="purchase mt-2">

      <a class="btn btn-dark btn-lg" @click='sendOrderMsg()' style="color: white;">Purchase account</a>
    </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["account", "skills"],
  created() {
    this.fetchAccount();
  },
  methods: {
    fetchAccount() {
      console.log(this.account);
    },
    sendOrderMsg() {
        tidioChatApi.messageFromVisitor("Hey, I want to order the following account: " + this.account.title + ' ' + 'for $' + this.account.price );
    }
  }
};
</script>
