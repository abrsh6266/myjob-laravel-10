<x-mail::message>
# Introduction

Congradulation you are now premium user.
<p>Your purchase details</p>
<p>Plan: {{$plan}}</p>
<p>Your plan ends on: {{$billing_ends}}</p>
<x-mail::button :url="''">
Post a Job
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
