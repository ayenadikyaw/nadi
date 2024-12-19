<template>
    <div style="height:425px; width:100%">
      <l-map 
        ref="map"
        :useGlobalLeaflet="false" 
        :zoom="13" 
        :center="markerPosition || [16.80528, 96.15611]"
        @click="handleMapClick"
      >
        <l-tile-layer
          url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
          attribution="&copy; OpenStreetMap contributors"
        />
        <l-marker 
          v-if="markerPosition" 
          :lat-lng="markerPosition"
        />
      </l-map>
      <div v-if="markerPosition" class="mt-2 text-sm">
        <i class="pi pi-map-marker mr-2"></i>
        Selected Location: {{ markerPosition }}
      </div>
      <div v-else class="mt-2 text-sm">
        <i class="pi pi-info-circle mr-2"></i>
        Click on the map to select a location.
      </div>
    </div>
  </template>
  
  <script>
  import "leaflet/dist/leaflet.css";
  import { LMap, LTileLayer, LMarker } from "@vue-leaflet/vue-leaflet";
  
  export default {
    components: {
      LMap,
      LTileLayer,
      LMarker
    },
    props: {
      location: {
        type: String,
        default:"[16.80528,96.15611]" // Default location
      }
    },
    data() {
      return {
        markerPosition: null 
      };
    },
    mounted() {
      // Initialize marker position in edit mode
      this.initializeMarkerPosition();
    },
    methods: {
      initializeMarkerPosition() {
        if (this.location) {
          try {
            const parsedLocation = JSON.parse(this.location);
            if (Array.isArray(parsedLocation) && parsedLocation.length === 2) {
              this.markerPosition = parsedLocation;
              // Ensure map is centered after component is fully mounted
              this.$nextTick(() => {
                if (this.$refs.map && this.$refs.map.leafletObject) {
                  this.$refs.map.leafletObject.setView(parsedLocation, 13);
                }
              });
            }
          } catch (e) {
            console.error("Invalid location format. Expected a JSON string like '[lat, lng]'.");
          }
        }
      },
      handleMapClick(event) {
        const { lat, lng } = event.latlng;
        this.markerPosition = [lat, lng]; // Update the marker position
        this.$emit("location-selected", JSON.stringify(this.markerPosition)); // Emit to parent in string format
      }
    }
  };
  </script>
  