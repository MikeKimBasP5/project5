import { StyleSheet, Text, View, FlatList, ActivityIndicator } from 'react-native';
import React, { } from 'react';
let DATA = [];

const OefeningenScreen = ({ route, navigation }) => {
    const [isLoading, setLoading] = React.useState(true);
    const getData = async () => {
        try {
            const response = await fetch("https://mikehaenen.nl/project5/public/api/exercises");
            const json = await response.json();
            DATA = json;
            console.log(DATA);
        }
        catch {

        }
        finally {
            setLoading(false);
        }
    }
    getData();
    return (
        <View style={styles.container}>
            <Text style={styles.header}>Oefeningen</Text>
            {isLoading ? <ActivityIndicator /> : (
                <FlatList style={styles.list}
                    data={DATA}
                    keyExtractor={item => item.id}
                    renderItem={({ item }) => (<Text onPress={() => { navigation.navigate("OefeningScreen", { data: item }) }}
                        style={styles.item}>{item.titleNL}</Text>)}
                />
            )}
        </View>
    );
}

const styles = StyleSheet.create({
  container: {
      flex: 1,
      backgroundColor: '#e9f7f7',
      alignItems: 'center',
  },
  header:{
      marginTop: 50,
      fontSize: 40,
      color: 'black',
  },  
  text:{
      top: '5%',
      textAlign: 'center',
      color: 'black',
      fontSize: 30,
  },  
  item: {
    borderWidth: 1,
    borderRadius: 30,
    borderColor: 'black',
    backgroundColor: '#bfedef',
    padding: 10,
    margin: 5,
    textAlign: 'center',
    width: 350,
    color: 'black'
},
});

export default OefeningenScreen;