<template>
  <Doughnut
    id="my-chart-id"
    :options="chartOptions"
    :data="chartData"
  />
</template>

<script>
import { Doughnut } from 'vue-chartjs';
import { Chart as ChartJS, ArcElement, Tooltip, Legend} from 'chart.js'

ChartJS.register(ArcElement, Tooltip, Legend)

export default {
  name: 'BarChart',
  components: { Doughnut },
  data() {
    return {
      chartData: {
        labels: ['Users', 'Posts', 'Discussions', 'Messages', 'Topics'],
        datasets: [
            {
                backgroundColor: ['#E63946', '#EDAE49', '#52489C', '#3376BD', '#00798C'],
                data: [40, 20, 80, 10, 5]
            }
        ]
      },
      chartOptions: {
        responsive: false,
        maintainAspectRatio: false
      }
    }
  }
}
</script>
