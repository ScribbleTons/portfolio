<template>
<div>
    <div class="absolute">
        <!-- The search section -->
        <div class="relative top-20 flex justify-between p-2">
            <form :action="route('contact.list')" method="get">
                <div class="block md:flex justify-between">
                    <Jet-input class="mr-2 mb-2 md:mb-0" type="text" name="search" placeholder="Search " />
                    <jet-button type="submit" class="mr-2">Search</jet-button>
                    <inertia-link :href="route('contact.list')">
                        <div class="text-left py-2">Reset</div>
                    </inertia-link>
                </div>
            </form>
            <div class="p-2 mx-4 ">
                <inertia-link :href="'/contact/list/trash'">
                    <span class="text-gray-700 font-mono font-semibold text-left">
                        Trash Bin
                    </span>
                </inertia-link>
            </div>
        </div>

        <!-- table section -->
        <div class="relative p-6 left-10 top-20 md:p-4 md:left-2 right-20 bg-white z-1">
            <table class="border-collapsed p-4 mx-5">
                <thead class="border-b-2 border-black mb-8">
                    <th class="p-2">#</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Message</th>
                    <th class="p-2">Timestamp</th>

                </thead>
                <tbody class="p-2" v-for="contact in contacts" :key="contact.id">

                    <tr class="shadow-sm hover:bg-gray-300">
                        <td class="px-2 py-1">{{contact.id}}</td>
                        <td class="px-2 py-1">
                            <inertia-link :href="route('contact.view', {contact:contact})">
                                {{contact.name}}
                            </inertia-link>
                        </td>
                        <td class="px-2 py-1">{{contact.email}}</td>
                        <td class="px-2 py-1 ">
                            <div class="truncate w-20">{{contact.message}}</div>
                        </td>
                        <td class="px-2 py-1 tracking-tightest text-sm">{{timestamp(contact.created_at)}}</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-gray-400 p-4 mx-5 w-full text-center" v-if="contacts.length == 0">Not item</div>
        </div>

    </div>
</div>
</template>

<script>
import moment from 'moment'
import JetDialogModal from './../../Jetstream/DialogModal'
import JetInput from './../../Jetstream/Input'
import JetButton from './../../Jetstream/Button'
import Layouts from './../../Layouts/AppLayout'
export default {
    layout: Layouts,
    components: {
        JetInput,
        JetButton,
        JetDialogModal,
    },
    props: {
        contacts: Array,
    },
    data() {
        return {
            show: false,
        }
    },
    computed: {

        contactCounter() {
            let contacts = this.contacts;
            var c = 0;
            for (var i = 0; i <= contacts.length; i++) {
                c += 1;
                console.log(c)
                return c;
            }

        }
    },
    methods: {
        timestamp(value) {
            var Xval = moment(value).format('LL');
            return Xval;
        },
        view() {
            this.show = true;
        }
    }
}
</script>
