<template>
    <div class="image-selector-container">
        <div class="form-group">
            <label for="input-id" class="control-label">
                <div class="input-label">
                    {{labelvalue}}
                </div>
            </label>
            <div class="image-selected">
                <div v-for="item in this.images" class="col-md-4">
                    <selected-image-container
                            v-bind:image="item"
                    ></selected-image-container>
                </div>
            </div>
            <input name='files[]' multiple data-buttonbefore="true" class="form-control filestyle" id="input-id"
                   type="file"
                   data-preview-file-type="text" v-on:change="handleInput">
        </div>
    </div>
</template>


<script>

    export default {

        props: ['imagedata', 'labelvalue', 'imagesrckey', 'deletelabel', 'deleteurl'],

        computed: {
            computedImageData: function () {
                if (this.imagedata !== null) {
                    return JSON.parse(this.imagedata);
                }

                return [];
            },
            computedImageSrcKey: function () {
                if (this.imagesrckey !== null) {
                    return this.imagesrckey;
                }
                return 'src';
            }
        },

        data() {
            return {
                images: [] // Data storage for selected images
            }
        },

        methods: {

            /**
             * Function for handling adding files (in this case images) to the component. Because
             * the image data field has a watcher, the new components will automatically render its
             * content.
             */
            handleInput: function (event) {
                this.images = [];
                for (let fileIndex = 0; fileIndex < event.target.files.length; fileIndex++) {
                    const file = event.target.files[fileIndex];
                    const src = URL.createObjectURL(file);
                    this.images.push({src: src});
                }
            },

        },

        /**
         * When mounted (initialized), make sure (if given) the images are showed on the grid. Otherwise
         * show nothing.
         */
        mounted() {

            // This procedure is only called when data is pre-given:
            for (let imageData = 0; imageData < this.computedImageData.length; imageData++) {
                const image = this.computedImageData[imageData];
                const imageSrcKey = this.computedImageSrcKey;
                this.images.push({
                    src: image[imageSrcKey],
                    data: image
                })
            }
        }
    }
</script>