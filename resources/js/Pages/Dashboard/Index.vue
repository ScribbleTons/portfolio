<template>
<div>
    <div class="absolute top-40 left-40 w-2/3">
        <div class="border-b-2 border-r-4 rounded-lg z-10 border-teal-700 hover:border-transparent">
            <h1 class="p-4 text-center font-semibold shadow-inner text-xl tracking-wide">Welcome to your dashboard <span class="text-green-600">{{user.name}}</span></h1>
        </div>
    </div>

</div>
</template>

<script>
import Layouts from './../../Layouts/AppLayout'
export default {
    layout: Layouts,
    props: {
        user: Object,
    }
}
</script>
