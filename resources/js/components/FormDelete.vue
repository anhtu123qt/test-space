<template>
    <div>
        <form :action="actionForm">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="method" value="DELETE">
            <Button btn-name="Delete" btn-type="submit" btn-class="btn btn-danger w-100"></Button>
        </form>
    </div>
</template>
<script>
import Input from './Input.vue';
import Button from './Button.vue';
export default {
  components: { Input,Button },
    data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }),        
    props:{
        'actionForm':String,
    }
}
</script>