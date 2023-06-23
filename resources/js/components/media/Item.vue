<template>
    <div class="media-item-wrapper">
        <img v-if="item.mime_type.startsWith('image')" :class="'h-' + height" class="object-cover w-full" :src="item.conversions.preview" :alt="item.name" />
        <div v-else :class="'h-' + height" class="w-full flex flex-col items-center justify-center">
            <icon :type="'m-document'" :width="48" :height="48" class="fill-no-stroke-current" />
          <div class="w-full">
            <p class="">{{item.name}}</p>
            <p class="mt-2">({{item.url}})</p>
          </div>

        </div>
        <slot></slot>
    </div>
</template>
<script>
    export default{
        props:['item', 'height']
    }
</script>
