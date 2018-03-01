<?
namespace App\Room;


class Room {

	private $bed;
	private $guests[];

	public function __construct(int $number) {
		$this->bed = $number;
	}

	public function setGuest(int $id) {
		$this->guests[$id] = $id;
	}


	public function getGuestsHistory() {

	}

}