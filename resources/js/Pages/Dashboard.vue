<template>
    <app-layout>
        <welcome></welcome>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import global from '@/Mixins/global'
    export default {
        components: {
            AppLayout,
            Welcome,
        },
        mixins:[global],
        mounted(){
          this.getSubCategories()
        }
    }
</script>
