<template>
    <avatar
        :username="field.value"
        :rounded="field.rounded"
        :size="field.avatar_size"
        :src="field.image"
        :color="field.color"></avatar>
</template>

<script>
import Avatar from 'vue-avatar'
export default {
    props: ['resourceName', 'field'],
    components: {
        Avatar
    }
}
</script>
