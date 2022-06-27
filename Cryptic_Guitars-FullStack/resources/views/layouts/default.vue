<script setup lang="ts">
import HeaderNav from '@/views/components/header-nav.vue'
import FooterNav from '@/views/components/footer-nav.vue'
// This is a peristent layout
// Include me with <template layout="default" />

</script>

<template>
	<HeaderNav />
	
	<slot />
	
	<FooterNav />
</template>
