<template>
    <panel-item :field="field">
        <template slot="value">
            <avatar
                :username="field.value"
                :rounded="field.rounded"
                :size="field.avatar_size"
                :src="field.image"
                :color="field.color"></avatar>
        </template>
    </panel-item>
</template>

<script>
import Avatar from 'vue-avatar'
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    components: {
        Avatar
    }
}
</script>
