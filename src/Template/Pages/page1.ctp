echo $this->Form->create($user);
// Text
echo $this->Form->input('username');
// Password
echo $this->Form->input('password');
// Day, month, year, hour, minute, meridian
echo $this->Form->input('approved');
// Textarea
echo $this->Form->input('quote');

echo $this->Form->button('Add');
echo $this->Form->end();