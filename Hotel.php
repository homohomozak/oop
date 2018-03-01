<?
namespace App\Hotel;

class Hotel {

	private $rooms = [];
	private $guests = [];

	public function addNewRoom($number) {
		$this->rooms[] = new Room($number);
	}

	public function addNewGuest($name) {
		$this->guests[] = new Guest($name);
	}

	public function getGuestHistory($id) {
		$guests[$id]->getGuestsHistory();
	}

	public function settleGuest($room_id, $guest_id) {
		$rooms[$room_id]->setGuest($guest);
	}

	public function getRoomsByDate(Date $date) {

	}

	public function getRoomsByInterval(Date $dateStart, Date $dateEnd) {

	}

	public function getMoney(Date $dateStart, Date $dateEnd) {

	}
}