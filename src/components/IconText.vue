<template>
<span class="icon-text">
    <span :class="size" class="icon is-size-4">
        <i :class="`devicon-${icon}-plain colored`"></i>
    </span>
    <span :class="{'has-text-weight-bold': bold}" >{{ text }}</span>
</span>
</template>

<script>
export default {
    name: 'IconText',
    props: {
        icon: String,
        text: String,
        size: {
            type: String,
            default: ''
        },
        bold: {
            type: Boolean,
            default: true
        }
    },
}
</script>

<style>

</style>