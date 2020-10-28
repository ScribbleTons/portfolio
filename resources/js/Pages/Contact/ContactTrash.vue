<template>
<div>

    <!-- table section -->
    <div class="relative p-6  left-10 top-20 md:p-4 md:left-2 right-20 bg-white z-1">
        <table class="border-collapsed  p-4 mx-5 ">
            <thead class="border-b-2 border-black mb-8">
                <th class="p-2">#</th>
                <th class="p-2">Name</th>
                <th class="p-2">Email</th>
                <th class="p-2">Message</th>
                <th class="p-2">Timestamp</th>
                <th></th>
            </thead>
            <tbody class="p-2" v-for="contact in contacts" :key="contact.id">

                <tr class="shadow-sm hover:bg-gray-300" v-if="contact.id">
                    <td class="px-2 py-1">{{contact.id}}</td>
                    <td class="px-2 py-1"> {{contact.name}}</td>
                    <td class="px-2 py-1">{{contact.email}}</td>
                    <td class="px-2 py-1 ">
                        <div class="truncate w-20">{{contact.message}}</div>
                    </td>
                    <td class="px-2 py-1 tracking-tightest text-sm">{{timestamp(contact.created_at)}}</td>
                    <td>
                        <div class="flex justify-between p-4">
                            <jet-button class="bg-green-600 mx-2 " @click.native="restore(contact)">restore</jet-button>
                            <jet-button class="bg-red-700" @click.native="destroy(contact)">delete</jet-button>
                        </div>
                    </td>
                </tr>
                <tr v-else>
                    <td>
                        <div class="text-md text-center text-gray-900">No Message</div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="text-gray-400 p-4 mx-5 w-full text-center" v-if="contacts.length == 0">Not item</div>

        <div class="relative p-8 ">
            <inertia-link :href="route('contact.list')">
                <jet-button class="hover:bg-green-600">Back</jet-button>
            </inertia-link>
        </div>
    </div>

</div>
</template>

<script>
import moment from 'moment'
import JetButton from './../../Jetstream/Button'
import Layouts from './../../Layouts/AppLayout'
export default {
    layout: Layouts,
    components: {
        JetButton
    },
    props: {
        contacts: Array,
    },
    data() {
        return {

        }
    },

    methods: {
        timestamp(value) {
            var Xval = moment(value).format('LL');
            return Xval;
        },
        restore(val) {
            this.$inertia.put(route('contact.restore', val));
            // console.log(val)
        },
        destroy(val) {
            this.$inertia.delete(route('contact.destroy', val))
            // console.log(val)
        }

    }
}
</script>
