<template>
    <div class="image-selector-container">
        <div class="form-group">
            <label for="input-id" class="control-label">
                {{labelvalue}}
            </label>
            <div class="image-selected">
                <div v-for="item in this.images" class="col-md-4">
                    <div class="panel panel-default" style="height: 100%;">
                        <div class="panel-body">
                            <selected-image v-bind:src=item.src></selected-image>
                        </div>
                    </div>
                </div>
            </div>
            <input name='files[]' multiple data-buttonbefore="true" class="form-control filestyle" id="input-id"
                   type="file"
                   data-preview-file-type="text" v-on:change="this.handleInput">
        </div>
    </div>
</template>


<script>

    import SelectorImage from './SelectorImage.vue'

    export default {

        props: [
            'imagedata',
            'labelvalue',
            'imagesrckey'
        ],

        components: {
            'selected-image': SelectorImage
        },

        computed: {
            computedImageData: function () {
                if (this.imagedata != null) {
                    return JSON.parse(this.imagedata);
                }

                return [];
            },
            computedImageSrcKey: function () {
                if (this.imagesrckey != null) {
                    return this.imagesrckey;
                }
                return 'src';
            }
        },

        data() {
            return {
                images: []
            }
        },

        methods: {
            handleInput: function (event) {
                for (let fileIndex = 0; fileIndex < event.target.files.length; fileIndex++) {
                    const file = event.target.files[fileIndex];
                    const src = URL.createObjectURL(file);
                    this.images.push({src: src});
                    console.log(this.images);
                    debugger;
                }
            },

        },

        mounted() {
            for (let imageData = 0; imageData < this.computedImageData.length; imageData++) {
                const image = this.computedImageData[imageData];
                const imageSrcKey = this.computedImageSrcKey;
                this.images.push({
                    src: image[imageSrcKey]
                })
            }
            console.log('test');
            console.log(this.images);
            debugger;
        }
    }
</script>