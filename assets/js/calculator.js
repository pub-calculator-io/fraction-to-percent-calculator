function calculate(){
  
  // 1. init & validate
  const num = input.get('fraction_number_top').integer().raw();
  const denom = input.get('fraction_number_bottom').natural().raw();
  const roundTo = input.get('round_to').optional().whole().lte(6).raw();
  input.silent = false;
  if(!input.valid()) return;

  // 2. calculate
  const percentValue = math.fraction(num, denom) * 100; 
  const result = roundTo ? math.round(percentValue, roundTo) : percentValue;

  // 3. output
  _('result').innerText = result + '%';

}
