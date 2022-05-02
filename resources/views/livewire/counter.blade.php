<div>{{-- 一番上にdivタグ--}}
    <div>
        <h1>初めてのLivewire!!</h1>
    </div>
    <div>
        <h2>{{ $count }}</h2>
    </div>
    <p><button wire:click="inc">+1</button></p>
    <input type="text" wire:model="message">{{ $message }}こっちはすぐ反映する
    @if(!$message)
    <p style="color:red;font-weight:bold">文字を入力してください。</p>
    @else
    <p>文字を入力しました。</p>
    @endif

    <div>
        <h2>ユーザー一覧</h2>
        <ol>
            @foreach($users as $user)
                <li>{{$user->name}}<button wire:click="delbtn({{ $user->id}})">★削除★</button></li>
            @endforeach
        </ol>
    </div>
</div>{{-- 一番下にdivタグやんないとwire:clicl動かん--}}
 