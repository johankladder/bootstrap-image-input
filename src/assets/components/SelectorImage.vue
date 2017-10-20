<template>
    <div>
        <img v-bind:src="src" class="selector-image"/>
    </div>
</template>

<script>
    export default {
        props: ['src']
    }
</script>