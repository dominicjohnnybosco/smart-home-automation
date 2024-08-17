namespace App\Services;

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\Exceptions\MqttClientException;

class MqttService
{
    protected $client;

    public function __construct() {
        $this->client = new MqttClient(env('MQTT_HOST'), env('MQTT_PORT'), env('MQTT_CLIENT_ID'));
        $this->client->connect();
    }

    public function publish($topic, $message) {
        $this->client->publish($topic, $message);
    }

    public function subscribe($topic, $callback) {
        $this->client->subscribe($topic, $callback);
    }

    public function __destruct() {
        $this->client->disconnect();
    }
}
