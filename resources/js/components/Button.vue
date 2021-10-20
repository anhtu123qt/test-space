<template>
  <div>
        <button :route="fullRoute" 
        :class="btnClass" 
        :type="btnType" 
        @click="onClick">
        {{btnName}}</button>
  </div>
</template>

<script>
export default {
    props:{
        btnType:String,
        btnName:String,
        btnClass:String,
        route:String,
    },
    data(){
      return {
        param1:"",
        param2:"",
      }
    },
    computed:{
      fullRoute() {
        return this.route + "/" + this.param1 + "/" + this.param2;
      }
    },
    methods:{
      onClick(){
        console.log(this.route)
        window.location.href=this.route;
      }
    }
}
</script>