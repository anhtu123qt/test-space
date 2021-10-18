<template>
   <div>
        <label class="form-label" :for="label">
            {{ label }}
        </label>
        <div class="form-group mb-3">
            <input class="form-control" type="text" :name="name">
        </div>
   </div>
</template>
<script>
export default {
    props:{
        'label':String,
        'name':String,
    }
}
</script>