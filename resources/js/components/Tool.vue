<template>
    <div>
        <heading class="mb-6">Media Library</heading>

        <button type="button" class="form-file-btn btn btn-default btn-primary mt-2" @click="existingMediaOpen = true">
          Open Gallery
        </button>

        <existing-media :open="existingMediaOpen" @close="existingMediaOpen = false" @select="addExistingItem"/>
    </div>
</template>

<script>
import ExistingMedia from './ExistingMedia';
export default {
    components: {
      ExistingMedia
    },
    metaInfo() {
        return {
          title: 'MediaLibrary',
        }
    },
    data() {
      return {
        existingMediaOpen: false,
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
