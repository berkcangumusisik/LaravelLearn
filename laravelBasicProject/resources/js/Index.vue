<template>
    <MainLayout>
      <div>Index</div>
      <Link href="/show">Show Page</Link>
      <div>The message is {{ message }}</div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '../Layouts/MainLayout.vue'
import { Link } from "@inertiajs/inertia-vue3";
defineProps({ message: String });
</script>
<!--
  <Link> etiketi Vue'de link yolu vermeyi sağlar.
-->
