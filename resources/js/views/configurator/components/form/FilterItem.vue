<template>
<div :class="`selector__pointer is-${$props.attr}`">
  <div>
    <slot name="icon-before"></slot>
    <slot name="select"></slot>
    <slot name="icon-after"></slot>
  </div>
</div>
</template>
<script>
export default {
  props: {
    attr: {
      type: String,
    },
  },

}
</script>
