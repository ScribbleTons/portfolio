<template>
<div class="h-5 max-w-md overflow-hidden">
    <div class="w-full h-full bg-gray-200 rounded-full relative">
        <div id="bar" class="transition-all ease-out duration-100 h-full rounded-full bg-gray-900 absolute" :style="progress"></div>
    </div>
</div>
</template>

<script>
export default {
    props: ['value'],
    data() {
        return {
            bar: 'w-20',
            width: null,
        }
    },
    created() {
        this.width = this.value
    },
    computed: {
        progress() {
            let intervalSpeed = 1000;
            let incrementSpeed = 1;

            document.addEventListener('DOMcontentLoaded', function () {
                let bar = document.getElementsById('bar');
                progressInterval = setInterval(function () {
                    this.width += incrementSpeed;
                    if (this.width >= 100) {
                        clearInterval(progressInterval);

                    }
                }, intervalSpeed);
            });
            return "width:" + this.width + "%;";
        }
    }
}
</script>
