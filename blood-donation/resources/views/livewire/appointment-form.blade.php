<form wire:submit.prevent="submit">
    <div>
        <label for="date">Select a date:</label>
        <livewire:date-picker
            id="date"
            :start-date="$startDate->format('Y-m-d\TH:i:s')"
            :end-date="$endDate->format('Y-m-d\TH:i:s')"
            :slot-duration="30"
            :fetch-slots="fetchSlots"
            @slot-selected="selectSlot"
        />
    </div>
    <div>
        <label for="time">Select a time:</label>
        <select id="time" wire:model="selectedSlot">
            <option value="">Choose a time slot</option>
            @foreach($availableSlots as $slot)
                <option value="{{ $slot }}">{{ $slot }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
