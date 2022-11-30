<template>
    <div>
        <heading class="mb-6">Media Library</heading>

        <button type="button" class="form-file-btn btn btn-default btn-primary mt-2" @click="existingMediaOpen = true">
          Open Gallery
        </button>

        <existing-media :open="existingMediaOpen" @close="existingMediaOpen = false" hide-select="true" />

        <heading class="mb-6 mt-12">Upload Image</heading>

        <tool-gallery :editable="true" :customProperties="true" :field="galleryFieldSettings" />
    </div>
</template>

<script>
import ExistingMedia from './ExistingMedia';
import ToolGallery from './ToolGallery';
export default {
    components: {
      ExistingMedia,
      ToolGallery,
    },
    metaInfo() {
        return {
          title: 'MediaLibrary',
        }
    },
    data() {
      return {
        existingMediaOpen: false,
        galleryFieldSettings: {
          mustCrop: false,
          croppable: true,
          customPropertiesFields: [
            {
              "attribute": "color",
              "component": "color",
              "helpText": null,
              "indexName": "Color",
              "name": "Color",
              "nullable": false,
              "panel": null,
              "prefixComponent": true,
              "readonly": false,
              "required": false,
              "sortable": false,
              "sortableUriKey": "color",
              "stacked": false,
              "textAlign": "left",
              "validationKey": "color",
              "value": null,
              "pickerType": "chrome"
            },
            {
              "attribute": "credit",
              "component": "text-field",
              "helpText": null,
              "indexName": "Credit",
              "name": "Credit",
              "nullable": false,
              "panel": null,
              "prefixComponent": true,
              "readonly": false,
              "required": false,
              "sortable": false,
              "sortableUriKey": "credit",
              "stacked": false,
              "textAlign": "left",
              "validationKey": "credit",
              "value": null,
              "suggestions": null
            },
            {
              "attribute": "usage_rights",
              "component": "text-field",
              "helpText": null,
              "indexName": "Usage Rights",
              "name": "Usage Rights",
              "nullable": false,
              "panel": null,
              "prefixComponent": true,
              "readonly": false,
              "required": false,
              "sortable": false,
              "sortableUriKey": "usage_rights",
              "stacked": false,
              "textAlign": "left",
              "validationKey": "usage_rights",
              "value": null,
              "suggestions": null
            }
          ]
        }
      }
    },
    mounted() {
        //
    },
    methods: {
      addExistingItem(item) {
        console.log(item);
      }
    },
}
</script>

<style>
/* Scoped Styles */
</style>
