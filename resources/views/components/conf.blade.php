@props(['commands'])
<div>
@foreach($commands as $command)
    @if(count($command))

    <div>
        <div>
            conf t
        </div>
        @foreach($command as $line)
            <div>
                {{ $line }}
            </div>
        @endforeach
        <div>
            end
        </div>
        <br>
    </div>
    @endif
@endforeach
</div>
