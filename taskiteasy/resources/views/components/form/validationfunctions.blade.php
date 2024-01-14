<script>
    function fieldNotEmptyMessage(field, fieldName) {
        return field === "" ? `${fieldName} must be filled out\n` : "";
    }

    function fieldLengthMessage(field, fieldName, max) {
        return field.length > max ? `${fieldName} can't have more than ${max} characters\n` : "";
    }

    function fieldIntegerMessage(field, fieldName) {
        return !(Number.isInteger(Number(field))) ? `${fieldName} must be an integer\n` : "";
    }

    function fieldNumberRangeMessage(field, fieldName, min, max) {
        field = number(field);
        return !(field >= min && field <= max) ? `${fieldName} must be between ${min} and ${max}\n` : "";
    }

    function fieldIsOption(field, fieldName, options) {
        return !(options.includes(field)) ? `${fieldName} must be one of ${options}\n` : "";
    }
</script>
