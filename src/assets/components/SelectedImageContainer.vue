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
                    this.image.src
                );

                this.$parent.images.splice(index, 1);

                if(this.image.data) {
                    this.removeWithAjax(this.image)
                }
            },

            removeWithAjax: function (image) {

                if (this.$parent.deleteurl && image.data) {
                    $.ajax(this.$parent.deleteurl  + '/' + image.data.id, {
                        type: 'DELETE',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        error: function (error) {
                            console.log(error);
                        }
                    })
                }
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