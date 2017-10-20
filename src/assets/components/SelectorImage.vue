<template>
    <div>
        <img v-bind:src="src" class="center-image selected-image"/>
    </div>
</template>

<script>
    export default {
        props: ['src']
    }
</script>