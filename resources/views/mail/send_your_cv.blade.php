<x-mail::message>
    # 📬 New CV Submission Received

    ---

    **👤 Full Name:**
    {{ $data->name }}

    **📧 Email:**
    {{ $data->email }}

    **🏢 Company Name:**
    {{ $data->company }}

    **🌍 Country:**
    {{ $data->country }}

    **💬 Motivation:**
    > {{ $data->message }}

    @if($data->attachment)
        **📎 CV Attachment:**
        A CV file has been attached with this message.
    @endif

    ---

    Thanks,
    **{{ config('app.name') }}**
</x-mail::message>
