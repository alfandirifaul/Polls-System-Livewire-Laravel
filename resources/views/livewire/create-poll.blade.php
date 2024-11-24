<div>
    <form wire:submit.prevent="createPoll">
        <label >Poll Title</label>
        <input type="text"  wire:model.live="title" >
{{--        Current title: {{ $title }}--}}
        @error('title')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="mt-4">
            @foreach($options as $index => $option)
                <div class="mb-2 mt-4">
                    <label for="">
                        OPTION {{ $index + 1}}
                    </label>
                </div>

                <div class="flex gap-3">
                    <input type="text" wire:model="options.{{ $index }}">
                    <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                </div>
                @error("options.{$index}")
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror

            @endforeach
        </div>

        <button class="btn mt-4" type="submit">Create Poll</button>

    </form>
</div>
