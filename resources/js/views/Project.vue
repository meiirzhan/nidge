<template>
    <div class="row-wo-mg main-part">
      <ImagePart :src="projects[activeProjectId].image" />
      <ProjectTextPart
        :project="projects[activeProjectId]"
        :projects="projects"
         />
    </div>
</template>

<script>
    import ImagePart from "../components/ImagePart";
    import ProjectTextPart from "../components/ProjectTextPart";

    export default {
        components: {
          ImagePart,
          ProjectTextPart
        },
        data: function () {
          return {
            projects: [
              {
                image: '/img/projects/waultr_2.jpg',
                image_fw: '/img/projects/waultr.jpg',
                title: "CRM Система для EVENT агенств",
                subtitle: "Разработано 2017 году",
                link: "waultr.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ахметов Темирлан",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/insa_2.jpg',
                image_fw: '/img/projects/insa.jpg',
                title: "INSA - генератор интернет магазинов",
                subtitle: "Разработано 2018 году",
                link: "insa.app",
                reviewText: "Этот проект мы сделали с душой",
                authorName: "Рыскелді Мейіржан",
                authorCompany: "Директор NIDGE / INSA",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/roomlook_2.jpg',
                image_fw: '/img/projects/roomlook.jpg',
                title: "RoomLook - площадька для дизайнеров и любетелей",
                subtitle: "Разработано 2016 году",
                link: "roomlook.com",
                reviewText: "NIDGE огонь, они сделали очень профессионально и ответили на все вопросы",
                authorName: "Ужкенов Айбек",
                authorCompany: "Директор Roomlook",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/intemotion_2.jpg',
                image_fw: '/img/projects/intemotion.jpg',
                title: "Интеллектуально-эмоциональная игра Intemotion",
                subtitle: "Разработано 2016 году",
                link: "intemotion.kz",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Карагусова Данна",
                authorCompany: "Директор Intemotion",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/polekz_2.jpg',
                image_fw: '/img/projects/polekz.jpg',
                title: "Сайт аренды футбольных полей POLEKZ",
                subtitle: "Разработано 2018 году",
                link: "pole.kz",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ужкенов Айбек",
                authorCompany: "Директор POLEKZ",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/automoney_2.jpg',
                image_fw: '/img/projects/automoney.jpg',
                title: "Web сайт и CRM система для автоломбарда",
                subtitle: "Разработано 2018 году",
                link: "automoney.asia",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Калиев Бауыржан",
                authorCompany: "Директор Marazini",
                authorAvatar: "/img/projects/1_author.png"
              }
            ],
            projectId: 0
          }
        },
        computed: {
          activeProjectId: function() {
            let projectId = this.$route.params.projectId;
            return typeof projectId === 'undefined' && !this.projects[projectId] ? this.projectId : projectId;
          }
        },
        mounted() {
          console.log(this.$route.params.projectId);
        }
    }
</script>

<style scoped>
  .main-part {
    height: 100vh;
  }
</style>
