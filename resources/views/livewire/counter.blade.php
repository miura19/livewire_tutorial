<div>{{-- 一番上にdivタグ--}}
    <div>
        <h1>初めてのLivewire!!</h1>
    </div>
    <div>
        <h2>{{ $count }}</h2>
    </div>
    <p><button wire:click="inc">+1</button></p>
    <input type="text" wire:model="message">{{ $message }}
</div>{{-- 一番下にdivタグやんないとwire:clicl動かん--}}