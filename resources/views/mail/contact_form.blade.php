<x-mail::message>
    # 📬 New Contact Form Submission

    ---

    **📝 Topic:**
    {{ $data->topic }}

    **👤 Sender Name:**
    {{ $data->name }}

    **📧 Email:**
    {{ $data->email }}

    @if($data->company)
        **🏢 Company:**
        {{ $data->company }}
    @endif

    @if($data->country)
        **🌍 Country:**
        {{ $data->country }}
    @endif

    **💬 Message:**
    > {{ $data->message }}

    @if($data->attachment)
        **📎 Attachment:**
        An attachment has been included with this message.
    @endif

    ---

    Thanks,
    **{{ config('app.name') }}**
</x-mail::message>
