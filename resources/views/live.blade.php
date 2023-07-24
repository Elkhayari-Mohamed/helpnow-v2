@if (Auth::user()->type_account == 'doctor')
    <script>
        var script = document.createElement("script");
        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            const config = {
                name: "{{ $doctor->doctor->first_name . ' ' . $doctor->doctor->last_name }}",
                meetingId: "TeleConsult",
                apiKey: "2451357a-9560-437a-9a09-1c0d62a4b98a",

                containerId: null,

                micEnabled: true,
                webcamEnabled: true,
                participantCanToggleSelfWebcam: true,
                participantCanToggleSelfMic: true,

                chatEnabled: true,
                screenShareEnabled: true,

                /*

                   Other Feature Properties

                    */
            };

            const meeting = new VideoSDKMeeting();
            meeting.init(config);
        });

        script.src =
            "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.31/rtc-js-prebuilt.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@else
    <script>
        var script = document.createElement("script");
        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            const config = {
                name: "{{ $patient->patient->first_name . ' ' . $patient->patient->last_name }}",
                meetingId: "TeleConsult",
                apiKey: "2451357a-9560-437a-9a09-1c0d62a4b98a",

                containerId: null,

                micEnabled: true,
                webcamEnabled: true,
                participantCanToggleSelfWebcam: true,
                participantCanToggleSelfMic: true,

                chatEnabled: true,
                screenShareEnabled: true,

                /*

                   Other Feature Properties

                    */
            };

            const meeting = new VideoSDKMeeting();
            meeting.init(config);
        });

        script.src =
            "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.31/rtc-js-prebuilt.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@endif
