<template>
  <div class="border-40 group px-4 pb-4 mb-4 w-1/6">
    <div class="shadow">
      <div class="overflow-hidden relative w-full" style="padding-top:100%;">
        <img v-if="'__media_urls__' in item && 'indexView' in item.__media_urls__" :src="item.__media_urls__.indexView" class="absolute block h-full pin-t pin-l w-full" style="object-fit: cover" />
        <button v-if="!hideSelect" type="button" class="absolute form-file-btn btn btn-default btn-primary pin-t pin-r m-2" @click="$emit('select')">{{__('Select')}}</button>
      </div>
      <div class="p-3 border-l border-r border-b border-40">
        <h4 class="truncate h-4 mb-1" v-if="'name' in item">{{ item.name }}</h4>
        <h5 class="truncate text-80" v-if="'file_name' in item">{{ item.file_name }}</h5>
        <!-- <h5 class="truncate text-80" v-if="item.custom_properties.color">{{ item.custom_properties.color }}</h5> -->
        <h5 class="truncate text-80 mt-1" v-if="item.custom_properties.credit">Credit: {{ item.custom_properties.credit }}</h5>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      item: {
        default: function () { return {}; },
        type: Object
      },
      hideSelect: {
        default: false,
        type: Boolean
      }
    },
    mounted() {
      console.log(this.item.custom_properties);
    },
  }
</script>
