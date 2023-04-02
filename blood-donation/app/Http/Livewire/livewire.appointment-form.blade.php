<div>
    <label for="date">Select a date:</label>
    <input type="date" id="date" name="date" wire:model="date">

    <label for="time">Select a time:</label>
    <input type="time" id="time" name="time" wire:model="time">

    <p>You have selected: {{ $date }} at {{ $time }}</p>
</div>
<script>
    $('#time').pickatime({
    format: 'HH:i',
    interval: 30
});

</script>