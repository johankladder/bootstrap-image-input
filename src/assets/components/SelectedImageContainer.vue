<template>
    <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body">
            <selected-image v-bind:src=image.src></selected-image>
        </div>
        <div class="panel-footer">
            <button v-on:click="remove" type="button" class="btn btn-danger btn-block">
                {{this.$parent.deletelabel}}
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['image'],

        inherit: true,

        methods: {
            remove: function () {
                const index = this.findWithAttr(
                    this.$parent.images,
                    'src',
                    this.src
                );
                this.$parent.images.splice(index,1)
            },

            findWithAttr: function (array, attr, value) {
                for (let i = 0; i < array.length; i += 1) {
                    if (array[i][attr] === value) {
                        return i;
                    }
                }
                return -1;
            }
        }
    }
</script>