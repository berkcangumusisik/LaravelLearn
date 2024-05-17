<!--
Layout Klasörü
Laravel'de "layouts" (düzenler), web uygulamanızda tekrar kullanılabilir sayfa yapılarını tanımlamak için kullanılır. Layouts, genel sayfa yapısını (başlık, menü, altbilgi gibi) tanımlar ve belirli sayfa içeriklerini yerleştirmek için dinamik alanlar sağlar. Bu, aynı yapıyı tekrar tekrar tanımlamak zorunda kalmadan, tüm sayfalarda tutarlı bir tasarım elde etmenizi sağlar.
-->

<template>
  <Link href="/">Main Page</Link>
  <Link href="/show">Show Page</Link>
  <slot>
    Default
  </slot>
  <div>The page with time {{timer}}</div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from 'vue'
const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>
