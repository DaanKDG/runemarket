<template>
 <div class="col-md-4">
        <h2 class="text-center">EDIT PANEL</h2>
        <p class="text-center"> </p>
    <form>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">Quest name</div>
                </div>
                <input type="text" class="form-control" value="" placeholder="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Quest price</div>
                </div>
                <input type="text" class="form-control" value="" placeholder="">
                <div class="input-group-prepend">
                    <div class="input-group-text">M</div>
                </div>
            </div>
         </div>
<button class="btn btn-outline-dark float-right"> Update</button>

</form>
        </div>

  
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
