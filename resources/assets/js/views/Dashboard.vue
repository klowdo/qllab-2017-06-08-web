<template>
    <main class="main">
        <content-upload></content-upload>
    </main>
</template>

<script>
import contentUpload from '../components/ContentUpload'

export default {
    created() {
        this.$store.dispatch('SET_TITLE', 'Dashboard');
    },
    components: {
        contentUpload
    }
}
</script>
