<template>
    <div>
        <form :action="actionForm">
            {{ protectForm }}
            {{ methodForm }}
        </form>
    </div>
</template>
<script>
export default {
    props:{
        'actionForm':String,
        'protectForm':String,
        'methodForm':String, 
    }
}
</script>