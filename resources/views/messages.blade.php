@push('scripts')
    <link href="/css/messages.css" rel="stylesheet" />
    <script src="/js/messages.js"></script>
    <script type="text/javascript">
        function renderMessage(message, user, date){
            const messageElm = `<x-message :text='1' :user-name='2' :created-at='3' />`;
            const node = document.createElement("DIV");
            const html = messageElm.replace('1', message).replace('2', user).replace('3', date);
            node.innerHTML = html;
            document.getElementById('messages-list').appendChild(node)
        }
        </script>
@endpush

<x-layout.default>
    <x-slot name="title">
        Messages
    </x-slot>

    <div id="messages-list" class="messages">
    @foreach ($messages as $message)
        <x-message :text='$message->content' :user-name='$message->user->name' :created-at='$message->created_at' />
    @endforeach
    </div>

    
    <x-forms.message-form />
    
</x-layout.default>