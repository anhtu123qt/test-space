<template>
  <div>
        <button :redirect="btnRedirect" :class="btnClass" :type="btnType" @click="onClick">{{btnName}}</button>
  </div>
</template>

<script>
export default {
    props:{
        btnType:String,
        btnName:String,
        btnClass:String,
        btnRedirect:String,
    },
    methods:{
      onClick(){
        console.log(this.btnRedirect)
        window.location.href=this.btnRedirect;
      }
    }
}
</script>