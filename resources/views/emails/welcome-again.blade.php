@component('mail::message')
# Introduction

The body of your message.

-one

-two

-three


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam blanditiis consectetur, est eum laboriosam officiis possimus quasi quia quidem reprehenderit sequi suscipit voluptatibus. Blanditiis cum deserunt iste! Autem, velit!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
