<template>
<div>
    <div class="absolute top-20 right-10 left-20 w-lg justify-items-center">

        <div class="bg-white flex flex-col lg:w-1/2 p-8">
            <h2 class="text-2xl text-center p-4 border-b-2">Message from <span class="font-bold">{{contact.name}}</span></h2>

            <div>
                <div class="flex justify-between">
                    <h3 class="p-4 mx-2 w-full"> <span class="text-gray-300 text-sm">Name: </span>{{contact.name}}</h3>
                    <h3 class="p-4 mx-2 w-full"><span class="text-gray-300 text-sm">Email: </span>{{contact.email}}</h3>
                </div>

                <p class="text-md text-left rounded-lg text-black border-r-2 border-b-2 border-gray-300 p-4">{{contact.message}}</p>
            </div>

            <div class="flex justify-between p-4">
                <inertia-link :href="route('contact.list')">
                    <jet-button class="hover:bg-green-600">Back</jet-button>
                </inertia-link>

                <jet-button class="bg-red-700" @click.native="trash(contact)">Delete</jet-button>

            </div>
        </div>
    </div>
</div>
</template>

<script>
import JetButton from './../../Jetstream/Button'
import Layouts from './../../Layouts/AppLayout'
export default {
    layout: Layouts,
    components: {
        JetButton
    },
    props: {
        contact: Object,
    },
    data() {
        return {

        }
    },

    methods: {
        trash(val) {
            this.$inertia.delete(route('contact.trash', val))
            // console.log(val)
        }
    }
}
</script>
